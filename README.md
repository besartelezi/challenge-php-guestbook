# Guestbook, I Guess It's a Book of Guests
The challenge this time will be to learn how to store data in files and to convert complex structures (arrays/objects) to string representation.

We want to learn this, by creating a good ol' fashioned guest book.
Any visitor on the page can leave a message, that message is then saved and displayed on the page.
Everybody who visits the page can see the messages.

## Must-have features
- [x] Posts must have the following attributes:
  - [x] Title
  - [x] Date
  - [x] Content
  - [x] Author name

- [x] Use at least 2 classes: PostLoader & Post
- [x] The messages are sorted from new (top) to old (bottom).
- [x] Make sure the script can handle [site defacement attacks](https://en.wikipedia.org/wiki/Website_defacement): use [htmlspecialchars()](https://www.php.net/htmlspecialchars)
- [x] Only show the latest 20 posts.

## Nice to have features
- [x] Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected.
- [x] When the user enters uses a "smiley" like ":-)", ";-)", ":-(" replace it with an image of such a smiley.
- [ ] Have an input field where the user can enter how many message he wants to see displayed.

## Features of my own I'd like to add
- [ ] Play an audio file of the viral clip 'watch yo profanity' when the user inputs a "bad" word.
- [ ] Display not only the date, but also the exact time of when the user posted.

## The first step
I'm taking this exercise as an opportunity to structure my PHP code a lot more clear.
In the PHP Blackjack exercise, I had a lot of issues because of the way my code was structured.
Mixing HTML with PHP with some more PHP and then some HTML mixed in with a doze of PHP and then some HTML again and then...
It can get quite confusing and nauseating.

That's when I read the advice our coaches gave us, *separate the view* **(HTML CODE)** as much as possible from the PHP code.
I realized a pretty neat way to do this, all because I was struggling so much in the last exercise.
Back then, my echo and print_r functions sometimes didn't work.
That was because the HTML was all over the place, opening and closing tags disrupted everything.

So, as per the coaches' advice, I made a some PHP files called headerView, bodyView, and footerView.
The headerView contains the head, as well as the opening HTML tag.
The bodyView contains the opening body tag, the closing body tag, and everything in between.
The footerView currently only contains the closing HTML tag.

I'm still unsure if this is the most optimal way to do this.
But, it's a huge step forward from how it looked like before!

## This isn't even my Final Form!
Quite literally, since I'm sure I will be making **a lot** of forms in the future.
For now, I'll try to read on as much as possible on how I can store user input on PHP.
I'm still not sure how to let users their input be shown to other users, so figuring that out is a top priority.

## When in doubt, write it out!

Post Class
-> Has the following:
* Properties:
  * Title, Content, Authorname, and Date
    * These are all strings

So when the user gives us their information for the post, in the $_POST, it will be an array.
I need to turn this array into an object, made out of strings.
That's where the Post Class comes in.
It needs to grab the $_POST array, turn it into an object, so something like this:

`$userInput = new Post($_POST["title"], $_POST["content"], $_POST["authorName"], $_POST["date"],)`

The class creates this object.
Then, the PostLoader stores this object, and is able to retrieve it again.

So my current goal is, is for when I print_r($userInput), the object needs to appear.

![some-text](images/patrick.gif)

## Ready, Get(ter) Set(ter), GO!!
I added getters to the Post class, so that I can access the private properties in the PostLoader class.
Afterwards, I added two functions to the PostLoader class, one called savePost() and the other called getPost() (they're basically just a getter and a setter but spicier).
I also had to make a txt file, where all the user input data could be stored.
The hardest part about storing the information, was figuring out how to properly decode and encode the information.
Storing the user data was easy enough without it, but that also means that a person could also easily access it.

This assignment did teach me a lot about storing and accessing user information.
I still don't understand it 100%, but I'm getting there.

What I did learn more about, was properly structuring my files.
I didn't get any of the same errors I had in the exercise prior to this one.
That's something the cool kids call a 'big W'.

## Current Objectives
Currently, there are two more things I want to do for this exercise:
- [x] Add a user input field, where they can decide how many posts they'd like to see
- [ ] There's currently a bug, where if the user refreshes the page, it resubmits the user data.
    - [ ] The most obvious solution is to let the user go to another page once they've filled in the form
    - [ ] And on that page, is where all the posts are visible.
    - Downside to this solution is that I need to cut out a lot of code, paste it somewhere else and I will need to do a lot of restructuring.
    I need a more time for this than what amount of time I have
- [ ] Show the time of when the post has been sent by the user

## Final thoughts
Like I mentioned earlier, this exercise definitely helped me structure my code and files way better.
It also helped me gain some insight on storing user data, and how forms work in PHP.
I still do need to practice some more on this, since I still don't understand storing data at a level where I'm comfortable at.
Like all programming and coding subjects, that is only something that I get better at the more I practice it.

All in all, this was a great exercise that was very much needed.

![thumbs-up](/images/thumbs-up.gif)