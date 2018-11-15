## P3 Peer Review

+ Reviewer's name: Steve Cordova    
+ Reviewee's name: Chris Crane
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/ccrane/p3-dwa>*


## 1. Interface

+ My initial impression of the site is very positive. It's a clean layout and partially responsive. It looks like a widget. It has a great logo and looks like it can be part of any professional website. The instructions were well laid out and there was little confusion as to what the intent was.
+ The only bit of confusion I had was the text input field for amount. I think it would be best to have two input text fields that would populate after you convert one currency to the other. The average rate period was at first glance confusing if you didn't read the instructions first.
+ The fact that nearly every country's currency, commodities, and even bitcoin was listed as an option is impressive. I never thought of factoring a period of time as a data point for currency conversion, but I can see how that would be helpful.
+ As previously mentioned, I would have another text input field in proximity to the other currency dropdown where the answer would populate instead of below the widget.


## 2. Functional testing

+ Submitted negative numbers, alphanumeric characters, and blank inputs and got all the appropriate error messages 
+ I selected obscure options like Gold (XAU) and input a decimal and was told that I needed to input a valid value but never said it had to be a whole integer.
+ I input a ridiculously large number and the error message I got was "enter a number". A limit wasn't set
+ I added folder names to the url and never got a 404 page. Any folder name I added always pushed me to the main page as a fallback


## 3. Code: Routes

+ The routes file is clean and has no code that should be in a controller


## 4. Code: Views

+ Template inheritance is used
+ No issues of concern in the view files. There was no non-display logic used in the blade file
+ Blade syntax was exclusively used
+ I understood every blade call and syntax used

## 5. Code: General

+ There were no visible inconsistincies in Chris's code. In fact, everything was nicely indented and easy to follow
+ Most every best practice was seen in the code
+ At least for me, seeing how the dropdown list was populated in such a compact way, would've been helpful if it were commented
+ The way the drop down list was populated. I think I would've listed out every option.
+ Again, the code was well written, nicely indented, and easy to follow. I think it would've been helpful to see comments but the code is written cleanly so it's not entirely necessary.

## 6. Misc
Great Job Chris!