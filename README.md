# mtg_game

## Versions


### newMtg4a.html
This version provided system to:
* print the deck
* shuffle deck
* draw a card from the shuffled deck.

I ran into an issue with appending the drawn cards into an array. Later, in "woMtg1a" I learned how to append objects to an array

### woMtg1a
This version provided a system to:
* Parse through a JSON file containing the card information
* Create a JSON object containing card information
* Grab the multiverseId-key value; the value corresponds with the card image file names
* Upon loading the page, a function that passes in the cards objects and appends them to an array using push
* The array is then displayed into a div element by concatenating multiverseId's embedded in an image call

Issues: The shuffle function I tried to bring over wasn't working, so the plan is to bring the append function to "newMtg4a"

## Image from an older version that utitlized mysql & php
![alt text](mtgDB.JPG "Description")
