<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
    [
        'quote' => "We should constantly be aspiring to reach higher and higher and higher. We should never be comfortable where we are.",
        'source' => "Lauryn Hill",
        'citation' => "Academy of Achievement",
        'year' => 2000
    ],
    [
        'quote' => "Musicians don’t retire; they stop when there’s no more music in them.",
        'source' => "Louis Armstrong",
        'citation' => "The Observer",
        'year' => 1968
    ],
    [
        'quote' => "Sometimes, what you’re looking for is already there.",
        'source' => "Aretha Franklin",
    ],
    [
        'quote' => "We all must follow a different path to let our light shine, and that's what makes us so unpredictable and unique.",
        'source' => "John Legend",
        'citation' => "'Let every child's light shine', CNN.com",
        'year' => 2015
    ],
    [
        'quote' => "Don't wait for the stars to align, reach up and rearrange them the way you want...create your own constellation.",
        'source' => "Pharrell",
    ],
    [
        'quote' => "We all have ability. The difference is how we use it.",
        'source' => "Stevie Wonder",
        'citation' => "'The Story of Stevie Wonder', Book by James Haskins",
        'year' => 1976
    ],
    [
        'quote' => "You are only as beautiful as the many beautiful things you do for others without expectation.",
        'source' => "Janelle Monae",
        'citation' => "Huffington Post",
        'year' => 2012
    ],
    [
        'quote' => "If everything was perfect, you would never learn and you would never grow.",
        'source' => "Beyoncé",
        'citation' => "Interview Magazine",
        'year' => 2001
    ],
    [
        'quote' => "You can’t just sit there and wait for people to give you that golden dream. You’ve got to get out there and make it happen for yourself.",
        'source' => "Diana Ross",
        'citation' => "Jet Magazine, Vol. 67, No. 2",
        'year' => 1985
    ],
    [
        'quote' => "Knowledge speaks, but wisdom listens.",
        'source' => "Jimi Hendrix",
    ]
];

//var_dump($quotes);


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array) {
    $randomNumber = rand(0, (count($array) - 1));
    return $array[$randomNumber];
}

// Create the printQuote function and name it printQuote
function printQuote($array) {
    $randomQuote = getRandomQuote($array);
    $htmlTemplate = "<p class='quote'>" . $randomQuote['quote'] . "</p>";
    $htmlTemplate .= "<p class= 'source'>" . $randomQuote['source'] ;
    if(array_key_exists('citation', $randomQuote)) {
        $htmlTemplate .= "<span class= 'citation'>" . $randomQuote['citation'] . "</span>";
        }
    if(array_key_exists('year', $randomQuote)) {
        $htmlTemplate .= "<span class= 'year'>" . $randomQuote['year'] . "</span>";
       }
    $htmlTemplate .= "</p>";
    
    echo $htmlTemplate;
}

//Generate RGB random color code
function randomColorCode() {
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $colorCode = "rgb($red, $green, $blue)";
    echo $colorCode;
}

?>