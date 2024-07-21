churnkey support assessment

Arthur Holmes

arthur@arthurholmes.com

https://churnkey.arthurholmes.com/my_account.php

Instructions to run the code locally:

1. The code uses PHP for server-side requests, so you will need to install either XAMPP or WAMP for PHP. In my local environment, I work with WAMP. You can install WAMP from this website: [WampServer](https://wampserver.aviatechno.net/).
   
2. Note that WAMP is for Windows, so use a Windows OS if possible. If you are using a Mac, you would typically use alternatives compatible with macOS, such as XAMPP and MAMP. Visit [XAMPP Installers and Downloads](https://www.apachefriends.org/index.html) for Apache Friends or [MAMP & MAMP PRO](https://www.mamp.info/en/) - your local web development solution for PHP and WordPress development.

3. Extract your file and follow the prompts (assuming you are using Windows).

4. Pick your language (English, Spanish, etc.).

5. Read the license agreement and accept it.

6. Click Next.

7. You may be prompted to download VC_2022_REDIST – Visual C++ 2015-2022 x86.

8. Go here if needed: [Latest supported Visual C++ Redistributable downloads | Microsoft Learn](https://docs.microsoft.com/en-us/cpp/windows/latest-supported-vc-redist?view=msvc-170).

9. Start the installation after required files are downloaded.

10. Follow the prompts and install.

11. Once WAMP is installed (could take a while), it should appear in your system tray (an icon). See image: [WAMP System Tray Icon](https://ibb.co/5rVDJYV).

12. Click the logo and select "Start All Services". See image: [Start All Services](https://ibb.co/kQTKFDJ).

13. The logo should turn green (it may turn orange, indicating not all services are running; Apache and PHP are the only two that matter here. If you click localhost and a WAMP window opens, you are most likely fine). See image: [Green Logo](https://ibb.co/j8KYyXy).

14. Go to your “Local Disk (C:)”; you should have a folder now called wamp64 or something similar. See image: [wamp64 Folder](https://ibb.co/WpjGT2c).

15. Open the folder called wamp64; it should contain a folder named ‘www’. Inside this folder, create a folder named ‘churnkey’. This is where you should download and install the files of this project.

16. Once you download/clone the project files of this repo to your www/churnkey folder, paste this URL into any browser (WAMP must be running): localhost/churnkey/my_account.php.

17. [localhost URL Example](https://ibb.co/Y2m2Ytf).

18. Click the cancel button and follow the steps: [Cancel Button](https://ibb.co/dr4FnYr).

**** Note: ******
if the above does not work and all you simply wish to do is see this working in action, visit: https://churnkey.arthurholmes.com/my_account.php
