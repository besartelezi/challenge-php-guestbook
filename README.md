# Guestbook, I Guess It's a Book of Guests
The challenge this time will be to learn how to store data in files and to convert complex structures (arrays/objects) to string representation.

We want to learn this, by creating a good ol' fashioned guest book.
Any visitor on the page can leave a message, that message is then saved and displayed on the page.
Everybody who visits the page can see the messages.

## Must-have features
- [ ] Posts must have the following attributes:
  - [ ] Title
  - [ ] Date
  - [ ] Content
  - [ ] Author name

- [ ] Use at least 2 classes: PostLoader & Post
- [ ] The messages are sorted from new (top) to old (bottom).
- [ ] Make sure the script can handle [site defacement attacks](https://en.wikipedia.org/wiki/Website_defacement): use [htmlspecialchars()](https://www.php.net/htmlspecialchars)
- [ ] Only show the latest 20 posts.

## Nice to have features
- [ ] Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected.
- [ ] When the user enters uses a "smily" like ":-)", ";-)", ":-(" replace it with an image of such a smiley.
- [ ] Have an input field where the user can enter how many message he wants to see displayed.
