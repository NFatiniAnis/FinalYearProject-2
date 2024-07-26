import axios from 'axios';

async function run(text) {
    try {
        const response = await axios.post(
            'https://api.sapling.ai/api/v1/aidetect',
            {
                key: '<api-key>',
                text,
            },
        );
        const {status, data} = response;
        console.log({status});
        console.log(JSON.stringify(data, null, 4));
    } catch (err) {
        const { msg } = err.response.data;
        console.log({err: msg});
    }
}

run('This is sample text'); // replace with the text you want to analyze

// Get the form and results elements
const form = document.getElementById('resume-form');
const results = document.getElementById('results');

// Add a submit event listener to the form
form.addEventListener('submit', async (event) => {
  // Prevent the form from submitting normally
  event.preventDefault();

  // Get the file from the form
  const file = document.getElementById('resume').files[0];

  // Read the file as text
  const text = await file.text();

  // Use an AI model to analyze the resume
  const response = await fetch('/analyze-resume', {
    method: 'POST',
    headers: {
      'Content-Type': 'text/plain'
    },
    body: text
  });

  // Get the analysis results from the response
  const analysis = await response.json();

  // Display the results on the webpage
  results.textContent = `Name: ${analysis.name}\nEmail: ${analysis.email}\nSkills: ${analysis.skills.join(', ')}`;
});