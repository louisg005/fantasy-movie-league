<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Fantasy Movie League</title>
    </head>
    <body>
    <h1>Fantasy Movie League</h1>
    <hr>
    <h2>Persona:</h2>
    <p>Jesse is using Fantasy Movie Leage. Jesse is a cinephile. Not merely a movie buff, Jesse has an eccentricity for the internal workings of the film industry, particularly the financial aspects. Jesse is 18-40 years old and male. Jesse was attracted to the site to compete with friends and family in a battle of wits, and thus does not have an overabundance of technological ability. Due to the simple and quick nature of the site, Jesse interacts with it in passing on a Motorola Droid Turbo running Android 5.1.</p>
    <h2>Use case:</h2>
    <p>Jesse's objective on this page is to fill the screens of his "cineplex" with the movies of his choice, while remaining under budget. His ultimate goal is to accumulate more "box office wealth" than those he is playing against.</p>
    <p>From the get-go, the system displays Jesse's name along the top of the screen. Adjacent to this are meters indicating the Jesse's total box office commissions and where that ranks among other users during the current season. Directly below this is a bar which informs the user of 4 things:</p>
    <ul>
        <li>The current season of play</li>
        <li>The current week within the season</li>
        <li>The deadline by which Jesse must have his picks locked in (date/time)</li>
        <li>The amount of "FML BUX" they have remaining in their account</li>
    </ul>
    <p>In the main body of the page, the system displays the eight empty "theater screens" alongside a list of the available movies.<br><br>Each item in the movie list is represented by an image from the film, the title of the film, and its cost to Jesse (in FML BUX).</p>
    <h3>Adding a movie to a screen</h3>
    <p>The first action taken by Jesse is to select a movie. By clicking on one of the listed movies, Jesse has selected that movie to play on "Screen 1".</p>
    <p>This is represented to Jesse by the appearance of the movie's poster in Screen Slot 1. Taking this action also subtracts the cost of the movie from Jesse's total available FML BUX, which is reflected in the top portion of the page. If the Jesse's amount of remaining FB$ is less than the cost of any of the movies, then the images representing those movies will become blurry and a line of text will appear over them indicating that they are now "UNAVAILABLE" to Jesse.</p>
    <p>Each time Jesse selects a movie to add to their Cineplex, the system places that movie poster in the vacant Screen Slot with the lowest number.</p>
    <p>Each time Jesse adds a movie to his Cineplex, the system briefly displays a message of "ALL CHANGES SAVED" near the top of the screen.</p>
    <h3>Removing a movie from a screen</h3>
    <p>Jesse may wish to revoke his decision to select a movie. To do so, he needs to hover over the chosen movie poster in its Screen Slot. The system then displays the clickable message "REMOVE". If Jesse clicks this, then that movie will be removed from that Screen Slot and the spent FB$ will be refunded to him. Any movies located in Screen Slots with higher Screen Numbers than the recently vacated slot will each move down by one slot to fill the lowest possible Screen Slot Numbers. </p>
    <p>Each time Jesse removes a movie from his Cineplex, the system briefly displays a message of "ALL CHANGES SAVED" near the top of the screen.</p>
    <h3>Jesse may continue to select available movies from the list until one of 2 things happen:</h3>
    <ul>
        <li>His remaining FML BUX is no longer equal to or greater than the cost of any movie</li>
        <li>All 8 of the Screen Slots have been filled</li>
    </ul>
    <p><strong>IMPORTANT NOTE:</strong>  Jesse is not required to spend all of his allocated FML BUX or fill all 8 Screen Slots, nor may it be in his best interest to do so strategically. Because of this, Jesse's entries are constantly saved automatically, but the indication of this is small and could easily go unnoticed by Jesse. A "confirm changes" button, while not technically necessary, could lead to Jesse's understanding of the rules of the game and thus, enjoyment.</p>
    <hr>
    <p>SCREENS:</p>
    <ul>
        <li>primary key</li>
        <li>movie ID (foreign key)</li>
        <li>time added</li>
        <li>time removed (optional)</li>
        <li>screen number</li>
        <li>movie title</li>
    </ul>
    <p>MOVIE:</p>
    <ul>
        <li>movie ID (primary key)........ONE-TO-MANY relationship with rows in the SCREENS table</li>
        <li>movie title</li>
        <li>FML BUX cost</li>
    </ul>
</html>