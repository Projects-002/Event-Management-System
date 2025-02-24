## Hey! 😒😒 First Clone the Ripository (**Inside htdocs folder**) using the Following link 

        
        https://github.com/Shamba-Salama/salamafarm.git
        
## Now lets do it..
![Hey There](https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExajF0ZXV1eWQ2dzlqdXp0YncyOGoyMjZpbmRpYXh3eTNiaDh0bmdtayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/toXKzaJP3WIgM/giphy.gif
 "Happy Coding.")


# 1. Install Composer

(Install PHP composer if you dont have it yet  [Download Composer](https://getcomposer.org/download)
*use the screenshot below if you get stuck at composer download page*
![Composer Download Page](Assets/Images/Readme/composerdownload.png "Download Composer.")


# 1.1 Note (easy peasy 😁👌)

After Installing or if you had composer installed, You can just run 

        
        composer Install
        

 and skip step 2 and go to step 3

![Just skip](https://media.giphy.com/media/3O3dsdSHBwQjC9gjnH/giphy.gif?cid=790b76116q29mopbijrskelsjv7nw1kihpvbsobdmt2h9li9&ep=v1_gifs_search&rid=giphy.gif&ct=g
 "Just Do the above instead.")



---


# 2. Install Required Dependencies

Run the Following Commands

### i. Install Google api client using
        
        composer require google/apiclient
        

### ii. phpdotenv to hide credentials using

        
        composer require vlucas/phpdotenv
        
### iii. Guzzle to send HTTP requests

        
        composer require guzzlehttp/guzzle
        

### iv. PHP Mailer to Be able to send email

        
        composer require phpmailer/phpmailer
        

---

# 3. Create .ENV FILE In your Parent Directory
 
   i. Copy The Following and paste inside your .env file

     
        GOOGLE_CLIENT_ID=
        GOOGLE_CLIENT_SECRET=
        GOOGLE_REDIRECT_URI=

        MICROSOFT_CLIENT_ID=
        MICROSOFT_REDIRECT_URI=


        DATABASE_PASS=
        DATABASE_NAME=


        GMAIL_USERNAME=
        GMAIL_APP_PASSWORD=
     

## Get .env credentials   
 
Login to [Google Cloud Console](https://www.cloud.google.com)

a) Create a Project

b) Configure OAuth consent screen for a project.
Watch this **just 60 seconds video📽️** 👉 [Click Me](https://youtu.be/TKnnrGU9MFw?si=J7qdC2Eexy9AST73)

c) Create Google OAuth Credentials.
Watch this **just a 27 seconds video📽️** 👉 [Click Me](https://youtu.be/OKMgyF5ezFs?si=q0qlAPwOJ1XP0wAX)

d) Now you have *GOOGLE_CLIENT_ID* and *GOOGLE_CLIENT_SECRET* , paste them in you *.env* file
    
For the GOOGLE_REDIRECT_URI use the Following template! **Make sure the project files are inside htdocs folder**
    
     
     http://localhost/salamafarm/auth/google_callback.php
     

# Happy Coding 🤗

![Composer Download Page](https://media.giphy.com/media/zOvBKUUEERdNm/giphy.gif?cid=ecf05e47c6do9t64n0licero4j7h0cias2z3a7kwraggkaww&ep=v1_gifs_related&rid=giphy.gif&ct=g
 "Download Composer.")


 # Nothing Makes sense?😒😒 
 -*Call me*
![Composer Download Page]( https://media.giphy.com/media/l41lVsYDBC0UVQJCE/giphy.gif?cid=790b7611is5xwx9znsi3ijqcnv8h7o1gc724ctu8wvdgk4sd&ep=v1_gifs_search&rid=giphy.gif&ct=g
 "Download Composer.")








