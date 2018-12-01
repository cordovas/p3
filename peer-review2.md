+ Reviewer's name: Steve Cordova
+ Reviewee's name: Stacy Schermann
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/1234tech/p3>*


## 1. Interface

+ My first impression is that it lacks a bit of styling. Even without the use of bootstrap or any other styling library, there were a few easy wins that could've put you over the top. As an example, the input field boxes don't line up. Creating a visual hierarchy with the checkbox and the rest of the page is an example of what you could've done. 
+ The page itself was self-explanatory so there was little confusion. It would've been nice to have a text-field that was more than just one line for an input field. Having pre-filled data in the form fields would've been a nice touch also.
+ When you submit your info, it immediately takes you to a page indicating what your response was, so from a functional standpoint, i think this project did well.
+ I think the idea works and is definitely a skeleton for something that can look really great. You're 90% of the way there but just need an extra focus on design and this would work.


## 2. Functional testing

+ The page displays the appropriate errors when no data is input in any or all of the fields.
+ For the email address, I input various characters. I searched for syntax basics to test out the email input form. I tried using a hyphen as the first and last letter in the domain and it caught it.
+ The feedback form doesn't distinguish between any real words or just a massive dump of text. It also didn't tell me beforehand that I only have 255 worth of characters to write my review.
+ I tried various script injections and the feedback form didn't execute any of them and rather just displayed what I typed.
+ I added folder names to the url and got the appropriate 404 page


## 3. Code: Routes

+ The routes file still had the commenting from the original template om the top. The additional commenting was not clear and very confusing. The routes worked and had no code that belonged in a controller.


## 4. Code: Views

+ Template inheritance is not used correctly. The child views were created to showcase the errors and strangely the validation but done in a way that inheritance wasn't neccesary there.
+ No issues of concern in the view files. There was no non-display logic used in the blade file
+ Blade syntax was used
+ I understood every blade call and syntax used

## 5. Code: General

+ Stacy's code followed the general standard and code style salve a few errant comments here and there.
+ A general code cleanup would've helped. Some laravel files were still present and the folder structure was confusing. It seems Stacy wanted to do a project around food but then didn't commit
+ Consistent and clear commenting would've helped in understanding the choices that were made. It was a bit unclear why certain decisions were made in relation to the inheritance
+ The use of a magic method was nice to see. Sometimes I get caught up in controlling everything and not using simple methods that are there to use
+ I think the project has potential but again is just missing a little bit more time to fix the issues around the commenting, the logic decisions, and general layout. Having a cluttered file structure too doesn't help when navigating other peoples code.

## 6. Misc
Just a little bit more work and this could be great!