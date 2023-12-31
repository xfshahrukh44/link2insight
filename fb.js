import puppeteer from 'puppeteer';
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import path from 'path';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export const getInfo = async (urls) => {
    // Launch the browser and open a new blank page
    const browser = await puppeteer.launch({
        headless: "new",
        executablePath: path.join(__dirname, '../..', '/.cache/puppeteer/chrome/linux-119.0.6045.105/chrome-linux64/chrome'),
        args: [ "--no-sandbox", "--disable-setuid-sandbox" ]
    });
    // const browser = await puppeteer.launch({
    //     headless: false,
    //     args: ["--no-sandbox"],
    // });
    const page = await browser.newPage();

    // //minimize window
    // const session = await page.target().createCDPSession();
    // const {windowId} = await session.send('Browser.getWindowForTarget');
    // await session.send('Browser.setWindowBounds', {windowId, bounds: {windowState: 'minimized'}});

    let results = [];

    for (const url of urls) {
        await page.goto(url);

        await page.setViewport({
            width: 2000,
            height: 2000
        })

        await timeout(10000);
        await closePopup(page);

        let object = {
            url,
            name: await getName(page),
            image: await getImage(page),
            followers: await getFollowers(page),
            likes: await getLikes(page),
            last_post_at: await getLastPostAt(page)
        };

        const keys = Object.keys(object);
        for (const key of keys) {
            if (object[key] === '') {
                delete object[key];
            }
        }

        results.push(object);
    }

    console.log(results);

    await browser.close();
    return results;
}

async function closePopup (page) {
    return await page.evaluate(() => {
        // Find the div with aria-label="Close"
        const closeButton = document.querySelector('div[aria-label="Close"]');

        // Check if the element is found
        if (closeButton) {
            // Click the element
            closeButton.click();
            console.log('Clicked the element with aria-label="Close"');
        } else {
            console.log('Element with aria-label="Close" not found');
        }
    });
}

async function getName (page) {
    return page.evaluate(() => {
        const allH1Elements = Array.from(document.querySelectorAll('h1'))
            .filter(h1 => h1.textContent.trim() !== 'Notifications');

        if (allH1Elements.length === 0) {
            return '';
        }

        return allH1Elements[0].textContent;
    });
}

async function getImage (page) {
    return page.evaluate(() => {
        return (document.querySelectorAll('image')[1]) ? document.querySelectorAll('image')[1].getAttribute('xlink:href') : '';
    });
}

async function getFollowers (page) {
    return page.evaluate(() => {
        let string = "";
        document.querySelectorAll('a').forEach(element => {
            if (element && element.textContent.endsWith(' followers')) {
                string += element.textContent ?? '';
            }
        });

        return string.replaceAll(' followers', '');
    });
}

async function getLikes (page) {
    return page.evaluate(() => {
        let string = "";
        document.querySelectorAll('a').forEach(element => {
            if (element && element.textContent.endsWith(' likes')) {
                string += element.textContent ?? '';
            }
        });

        return string.replaceAll(' likes', '');
    });
}

async function getLastPostAt (page) {
    return page.evaluate(() => {
        // let elements = [];
        let result = "";
        for (const element of document.querySelectorAll('span')) {
            if (element &&
                element.textContent &&
                !element.textContent.includes('Privacy') &&
                !element.textContent.includes('Meta') &&
                (
                    element.textContent.endsWith(' m') ||
                    element.textContent.endsWith(' h') ||
                    element.textContent.endsWith(' d') ||
                    element.textContent.includes('Shared with Public') ||
                    element.textContent.endsWith(' ' + ((parseInt(new Date().getFullYear()) - 1).toString()))
                )
            ) {
                result = element.textContent.replaceAll('Shared with Public', '').replace(/^[^\w]+|[^\w]+$/g, '').trim();
                break;
                // return element.textContent.replaceAll('Shared with Public', '').replace(/^[^\w]+|[^\w]+$/g, '').trim();
                // elements.push(element.textContent);
                // return (element.textContent.replaceAll('Shared with Public', '').replace(/^[^\w]+|[^\w]+$/g, '').trim()) ?? '';
            }
        }

        return (result !== undefined) ? result : '';

        // return elements;
    });
}

function timeout(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// await getInfo([
//     "https://www.facebook.com/AcdcDanmark",
//     "https://www.facebook.com/acdc",
//     "https://www.facebook.com/ACDCgaleon",
//     "https://www.facebook.com/thunderstruckus",
//     "https://www.facebook.com/acdcxmas",
//     "https://www.facebook.com/acdcscotland",
//     "https://www.facebook.com/ACDCARMY",
//     "https://www.facebook.com/acdctraining",
//     "https://www.facebook.com/ACDC.Brasil",
//     "https://www.facebook.com/acdcworldwide",
//     "https://www.facebook.com/ACDCFamily",
//     "https://www.facebook.com/GalaxyACDC",
//     "https://www.facebook.com/theACDCexperience",
//     "https://www.facebook.com/ACDCElectricpvtltd",
//     "https://www.facebook.com/LivewireACDCshow",
//     "https://www.facebook.com/acdcitaliacom",
//     "https://www.facebook.com/acdcmx",
//     "https://www.facebook.com/nyasabigbulletsfc",
//     "https://www.facebook.com/fcbmasia",
//     "https://www.facebook.com/fcbsports324",
//     "https://www.facebook.com/VISCA.FCB.1899",
//     "https://www.facebook.com/we.love.FCB",
//     "https://www.facebook.com/FANDELFCB10",
//     "https://www.facebook.com/BarceloneFCB2015",
// ]);
