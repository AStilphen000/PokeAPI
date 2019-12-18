const express = require('express');
const app = express();
const port = 3001;
var fetch = require('node-fetch');


// serve static files
app.use(express.static("public"));
app.use('/img', express.static('public/img'));
app.use('/stylesheets', express.static('public/stylesheets'));
app.use('/css', express.static('public/css'));
app.use('/lib', express.static('public/lib'));
app.use('/js', express.static('public/js'));

const resume = {
    "basics": {
        "name": "Angelina Stilphen",
        "label": "Programmer",
        "picture": "",
        "email": "john@gmail.com",
        "phone": "(912) 555-4321",
        "website": "http://johndoe.com",
        "summary": "A summary of John Doe...",
        "location": {
            "address": "2712 Broadway St",
            "postalCode": "CA 94115",
            "city": "San Francisco",
            "countryCode": "US",
            "region": "California"
        },
        "profiles": [{
            "network": "Twitter",
            "username": "john",
            "url": "http://twitter.com/john"
        }]
    },
    "work": [{
        "company": "Company",
        "position": "President",
        "website": "http://company.com",
        "startDate": "2013-01-01",
        "endDate": "2014-01-01",
        "summary": "Description...",
        "highlights": [
            "Started the company"
        ]
    }],
    "volunteer": [{
        "organization": "Organization",
        "position": "Volunteer",
        "website": "http://organization.com/",
        "startDate": "2012-01-01",
        "endDate": "2013-01-01",
        "summary": "Description...",
        "highlights": [
            "Awarded 'Volunteer of the Month'"
        ]
    }],
    "education": [
        {
            "institution": "University",
            "area": "Software Development",
            "studyType": "Bachelor",
            "startDate": "2011-01-01",
            "endDate": "2013-01-01",
            "gpa": "4.0",
            "courses": [
                "DB1101 - Basic SQL"
            ]
        }
    ],
    "awards": [{
            "title": "Award",
            "date": "2014-11-01",
            "awarder": "Company",
            "summary": "There is no spoon."
        },
        {
            "title": "Award",
            "date": "2014-11-01",
            "awarder": "Company",
            "summary": "There is no spoon."
        }
    ],
    "publications": [{
        "name": "Publication",
        "publisher": "Company",
        "releaseDate": "2014-10-01",
        "website": "http://publication.com",
        "summary": "Description..."
    }],
    "skills": [
        {
            "name": "HTML",
            "level": "90"
        },
        {
            "name": "CSS",
            "level": "90"
        }
    ],
    "languages": [{
        "language": "English",
        "fluency": "Native speaker"
    }],
    "interests": [{
        "name": "Wildlife",
        "keywords": [
            "Ferrets",
            "Unicorns"
        ]
    }],
    "references": [{
        "name": "Jane Doe",
        "reference": "Reference..."
    }]
};





/** TEMPLATE ENGINE
* Express Handlebars is setup here
* 1. 
* 2. app
     - The default layout is the main.hbs file
  3. 
    - [app.engine](https://expressjs.com/en/api.html#app.engine)
    - [app.set](https://expressjs.com/en/api.html#app.set)
*/
const hbs = require('express-handlebars')({
    defaultLayout: "main",
    extname: '.hbs',
  });
  app.engine('hbs', hbs);
  app.set('view engine', 'hbs');


/*
* Routes
*/
app.get("/", (request, res) => {
    res.render('index', {
      name: resume.basics.name,
      skills: resume.skills
    });
  });

app.get('/resume', (req, res) => {
    console.log("resume")
});



// file you render and
app.get('/pokemon/:id', async (req, res) => {
    try {
        const URI = `https://pokeapi.co/api/v2/pokemon/${req.params.id}`;
        const pokemonData = await fetch(URI);
        const json = await pokemonData.json();
        // console.log(json);
        const pokeName = await json.name;
        const pokeImg = await json.sprites.front_default;
        // console.log(pokeImg);
    
        res.render('index', {
            name: pokeName,
            img: pokeImg
        });
    } catch (error) {
        console.log(error); 
    }
         
});

app.get('/starwars', async (req, res) => {
    try {
        const URI = `https://swapi.co/api/people/`;
        const peopleData = await fetch(URI);
        const json = await peopleData.json();
        
        const [...results] = json.results

        console.log(json.results);
     
    
        res.render('starwars', {
            characters: results,
            // img: ""
        });
    } catch (error) {
        console.log(error); 
    }
         
});


app.get('/starwars/:id', async (req, res) => {
    try {
        const URI = `https://swapi.co/api/people/${req.params.id}`;
        const peopleData = await fetch(URI);
        const json = await peopleData.json();
        console.log(json);
     
    
        res.render('index', {
            name: json.name,
            // img: ""
        });
    } catch (error) {
        console.log(error); 
    }
         
});





app.listen(port, () => {
    console.log(`Server started on ${port}`);
});
//npm start, open your browser and run localhost:port