# 👨🏻‍🎓 Registration-panel-for-studies

# 👨‍💻 Author :

Dominik Blak : <a href="https://github.com/dominikblak">GitHub</a>

## 🚀 Demo :
[Registration-panel-for-studies](https://www.dominikblak.stronazen.pl/projects/agh/)
</br></br>
### 📖 Description :
On my website, the user has the option of registering for a 1,2 degree program or post-graduate studies with the chosen faculty, and setting up a student's account. In the back office panel, the website administrator has the option of reviewing the saved  candidates divided into degrees and removal of individuals. I have also added information about the school, along with the gallery, and contact details with using the API from Google Maps. I created the registration form using validation for individual fields and I added the ReCaptcha tool to protect against spam. In the form I used code sanitization and secured it against so-called "SQL injection".This website is a final project of postgraduate studies at AGH.</br></br>
<img src="https://github.com/dominikblak/Registration-panel-for-studies/blob/master/DemoAnimation.gif" alt="demo_animationn">



#### 🧰 Technology :

PHP version: 5.6.30</br>
Boostrap version:3.3.7.</br>
MySQL Ver 15.1 Distrib 10.1.21-MariaDB, for Win32 (AMD64)</br>



Sample student account: (student panel)</br>
login: adam@wp.pl</br>
password: qwerty123</br>

Admin account (backoffice panel):</br>
login: admin</br>
password: qwerty123</br>

Data to connect to a local database: (file connect.php)</br>
$host="localhost";</br>
$db_user="root";</br>
$db_password="";</br>
$db_name="studies";</br>

#### 🗃 Project structure :
```
📦Registration-panel-for-studies
 ┣ 📂sql
 ┃ ┗ 📜studies.sql
 ┣ 📂src
 ┃ ┣ 📂bootstrap-3.3.7
 ┃ ┃ ┣ 📂css
 ┃ ┃ ┃ ┣ 📜bootstrap-theme.css
 ┃ ┃ ┃ ┣ 📜bootstrap-theme.css.map
 ┃ ┃ ┃ ┣ 📜bootstrap-theme.min.css
 ┃ ┃ ┃ ┣ 📜bootstrap-theme.min.css.map
 ┃ ┃ ┃ ┣ 📜bootstrap.css
 ┃ ┃ ┃ ┣ 📜bootstrap.css.map
 ┃ ┃ ┃ ┣ 📜bootstrap.min.css
 ┃ ┃ ┃ ┣ 📜bootstrap.min.css.map
 ┃ ┃ ┃ ┗ 📜style.css
 ┃ ┃ ┣ 📂fonts
 ┃ ┃ ┃ ┣ 📜glyphicons-halflings-regular.eot
 ┃ ┃ ┃ ┣ 📜glyphicons-halflings-regular.svg
 ┃ ┃ ┃ ┣ 📜glyphicons-halflings-regular.ttf
 ┃ ┃ ┃ ┣ 📜glyphicons-halflings-regular.woff
 ┃ ┃ ┃ ┗ 📜glyphicons-halflings-regular.woff2
 ┃ ┃ ┗ 📂js
 ┃ ┃ ┃ ┣ 📜bootstrap.js
 ┃ ┃ ┃ ┣ 📜bootstrap.min.js
 ┃ ┃ ┃ ┣ 📜menu.js
 ┃ ┃ ┃ ┗ 📜npm.js
 ┃ ┣ 📂courses
 ┃ ┃ ┣ 📜elektronika.php
 ┃ ┃ ┣ 📜elektrotechnika.php
 ┃ ┃ ┣ 📜footer2.php
 ┃ ┃ ┣ 📜informatyka.php
 ┃ ┃ ┣ 📜matematyka.php
 ┃ ┃ ┣ 📜menu2.php
 ┃ ┃ ┣ 📜programowanie.php
 ┃ ┃ ┣ 📜systemybd.php
 ┃ ┃ ┣ 📜teleinformatyka.php
 ┃ ┃ ┣ 📜zarzadzanie.php
 ┃ ┃ ┗ 📜zarzadzaniep.php
 ┃ ┣ 📂img
 ┃ ┃ ┣ 📜1s.jpg
 ┃ ┃ ┣ 📜2s.jpg
 ┃ ┃ ┣ 📜3s.jpg
 ┃ ┃ ┣ 📜4s.jpg
 ┃ ┃ ┣ 📜5s.jpg
 ┃ ┃ ┣ 📜agh-logo.png
 ┃ ┃ ┣ 📜agh-mapa.png
 ┃ ┃ ┣ 📜backoffice.jpg
 ┃ ┃ ┣ 📜bpanel.jpg
 ┃ ┃ ┣ 📜concrete.png
 ┃ ┃ ┣ 📜elektronika.jpg
 ┃ ┃ ┣ 📜elektrotechnika.jpg
 ┃ ┃ ┣ 📜gmach.jpg
 ┃ ┃ ┣ 📜informatyka.jpg
 ┃ ┃ ┣ 📜marker.png
 ┃ ┃ ┣ 📜matematyka.jpg
 ┃ ┃ ┣ 📜programowanie.jpg
 ┃ ┃ ┣ 📜rejestracja.jpg
 ┃ ┃ ┣ 📜rejestracjas.jpg
 ┃ ┃ ┣ 📜schody.jpg
 ┃ ┃ ┣ 📜student.jpg
 ┃ ┃ ┣ 📜systemybd.jpg
 ┃ ┃ ┣ 📜tablica.jpg
 ┃ ┃ ┣ 📜teleinformatyka.jpg
 ┃ ┃ ┣ 📜zarzadzanie.jpg
 ┃ ┃ ┗ 📜zarzadzaniep.jpg
 ┃ ┣ 📂menu
 ┃ ┃ ┣ 📂addons
 ┃ ┃ ┃ ┣ 📂bootstrap
 ┃ ┃ ┃ ┃ ┣ 📜jquery.smartmenus.bootstrap.css
 ┃ ┃ ┃ ┃ ┣ 📜jquery.smartmenus.bootstrap.js
 ┃ ┃ ┃ ┃ ┗ 📜jquery.smartmenus.bootstrap.min.js
 ┃ ┃ ┃ ┗ 📂keyboard
 ┃ ┃ ┃ ┃ ┣ 📜jquery.smartmenus.keyboard.js
 ┃ ┃ ┃ ┃ ┗ 📜jquery.smartmenus.keyboard.min.js
 ┃ ┃ ┣ 📂css
 ┃ ┃ ┃ ┗ 📜sm-core-css.css
 ┃ ┃ ┣ 📂libs
 ┃ ┃ ┃ ┣ 📂demo-assets
 ┃ ┃ ┃ ┃ ┣ 📂shjs
 ┃ ┃ ┃ ┃ ┃ ┣ 📜shjs.css
 ┃ ┃ ┃ ┃ ┃ ┗ 📜shjs.js
 ┃ ┃ ┃ ┃ ┣ 📜demo.css
 ┃ ┃ ┃ ┃ ┣ 📜readme.txt
 ┃ ┃ ┃ ┃ ┗ 📜themes-switcher.js
 ┃ ┃ ┃ ┗ 📂jquery
 ┃ ┃ ┃ ┃ ┗ 📜jquery.js
 ┃ ┃ ┣ 📜jquery.smartmenus.js
 ┃ ┃ ┗ 📜jquery.smartmenus.min.js
 ┃ ┣ 📜backoffice.php
 ┃ ┣ 📜base_pdo.php
 ┃ ┣ 📜bpanel.php
 ┃ ┣ 📜connect.php
 ┃ ┣ 📜contact.php
 ┃ ┣ 📜delete1.php
 ┃ ┣ 📜delete2.php
 ┃ ┣ 📜delete3.php
 ┃ ┣ 📜footer.php
 ┃ ┣ 📜gallery.php
 ┃ ┣ 📜index.php
 ┃ ┣ 📜list1.php
 ┃ ┣ 📜list2.php
 ┃ ┣ 📜list3.php
 ┃ ┣ 📜logout.php
 ┃ ┣ 📜menu.php
 ┃ ┣ 📜registered.php
 ┃ ┣ 📜registration.php
 ┃ ┣ 📜registration1.php
 ┃ ┣ 📜registration2.php
 ┃ ┣ 📜registration3.php
 ┃ ┣ 📜school.php
 ┃ ┣ 📜sign_inb.php
 ┃ ┣ 📜sign_ins.php
 ┃ ┣ 📜spanel.php
 ┃ ┣ 📜student.php
 ┃ ┗ 📜welcome.php
 ┣ 📜DemoAnimation.gif
 ┣ 📜docs.pdf
 ┣ 📜LICENSE
 ┣ 📜README.md
 ┗ 📜readme.txt
```

