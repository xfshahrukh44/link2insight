import {getInfo} from './fb.js';
import express from 'express';
import bodyParser from 'body-parser';

// Create an Express application
const app = express();

// Middleware to parse JSON in the request body
app.use(bodyParser.json());

// Define a route for the endpoint
app.post('/', async (req, res) => {
    console.log(req.body);
    // Check if the request body is an array of strings
    if (req.body && req.body.urls) {
        // Assuming the request body contains an array of strings
        const arrayOfStrings = req.body.urls;
        if (Array.isArray(arrayOfStrings) && arrayOfStrings.every(item => typeof item === 'string')) {
            try {
                let results = await getInfo(req.body.urls);
                res.json({ success: true, data: results });
            } catch (error) {
                console.error('Error processing request:', error);
                res.status(500).json({ success: false, message: 'Internal server error.' });
            }
        } else {
            res.status(400).json({ success: false, message: 'Invalid request body. Expecting an array of strings.' });
        }
    } else {
        res.status(400).json({ success: false, message: 'Invalid request body. Expecting an array of strings.' });
    }
});

// Set up the server to listen on port 3000
const PORT = 3044;
app.listen(PORT, () => {
    console.log(`Server is running on port: ${PORT}`);
});

app.timeout = 60000;
