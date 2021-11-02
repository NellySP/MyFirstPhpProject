<img src="https://media.giphy.com/media/kfKl7x4Mf4Htt6AJdX/giphy.gif">

# Plant generator

This project is a sort of plant generator that can help people to chose a plant they can try not to kill. The plants are all simple to care for and should be easy not to kill to fast. The project is the first real project to be uploaded on github and it consists of php (arrays, loops, variables), css, html and a just a little bit of javascript. You can look at the project here: https://sparvare.com/MyFirstPhpProject/index.php



# Installation

Clone this repo and open it with a code-editor.
Open a localhost in your terminal by writing: php -S localhost:8000
Visit the localhost in your browser.

# Code Review

Code review written by [Agnes Skönvall](https://github.com/agnesskonvall).

1. `data.php:14` - Is adding an id to every array in the array really necessary? The array already supplies an internal id to every internal array!
2. `functions.php:14-17` - Using a function for something this simple makes the code less readable. Perhaps you could just echo the text itself along with the internal date-function `date`?
3. `styles.css:86-93` - As for the CSS, the buttons do appear to be a bit too small, too close together as well as not very readable. Perhaps some padding would make them appear bigger? Very pleasant hover-effects all things considered!
4. `styles.css:109-131` - You're using the same styling for a lot of classes. Maybe it would be easier to use the same class for different elements if you're styling them the same way. The content can differ even with the same class!
5. `TIP` - In future projects, maybe you could make use of multiple css files just to keep things neat and clean. Good use of classes though!

> #### _Great work! You appear to have a solid understanding of using PHP along with your HTML and CSS. Very impressive use of JavaScript as well! Keep it up!_ 💫


# Testers

Tested by the following people:

1. Emma Hansson
2. Sofia Dersén
