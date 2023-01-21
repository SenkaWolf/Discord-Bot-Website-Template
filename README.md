![Last Commit](https://img.shields.io/github/last-commit/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge) ![Open Issues](https://img.shields.io/github/issues/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge) ![Forks](https://img.shields.io/github/forks/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge)

# Discord Bots Website Template
Stunning website template with a basic UI design for any new Discord bots projects or can be adapted to suit any need. It is built with Bootstrap and comes with some ready-made pages.

Demo: https://demo-discordbot-website-template.senkawolf.com

## Main Page:

![Screenshot1](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/index.png)

## Command Page:
![Screenshot4](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/commands.png)

and more pages...

# Installing
Click Code then press download ZIP. Once you have the ZIP file extract the files and upload the website folder contents to your servers websites root folder via FTP. Or use whatever method you prefer.

If you already have a `.htaccess` setup then remove the one which comes with this template. If you want to learn more about htaccess files then read up more [here](https://developer.mozilla.org/en-US/docs/Learn/Server-side/Apache_Configuration_htaccess). (Disclaimer: Not Affiliated)

## Built With: 

* [Bootstrap](https://getbootstrap.com/) - The web framework used
* [Jquery](https://jquery.com/) - For scripts

## How To Use

These pages get included on the index and command page. This allows you to update one file and all pages will reflect the change.
* To edit the header go to `includes/header.php` - Contains meta tags, favicon, CSS and Scripts. _Specific page related CSS files or title meta tags are excluded from this file._
* To edit the navbar go to `includes/navbar-index.php` - Contains navbar and should **only be included on the index**.
* To edit the navbar go to `includes/navbar-pages.php` - Contains navbar and should be used on all pages **except the index**.
* To edit the footer go to `includes/footer.php` - Contains all code for the footer....
* To edit the footer go to `includes/javascript.php` - Contains all the mandatory javascript code. _Specific page related javascript code are excluded from this file._

If you want to change the websites accent colours then edit the following sections within `assets/css/style.css`
```CSS
/* Main Text accent colour */
:root {
	--bs-accent-rgb: 214,51,132;
}

/* Button with Outline */
.btn-outline-accent {
	color: #d63384;
	border-color: #d63384;
}

.btn-outline-accent:hover {
	color: #fff;
	background-color: #d63384;
	border-color: #d63384;
}

/* Solid Button */
.btn-accent {
	color: #000;
	background-color: #d63384;
	border-color: #d63384;
}

.btn-accent:hover {
	color: #fff;
	background-color: #cb0266;
	border-color: #cb0266;
}

/* Text Colour */
.text-accent-colour {
	--bs-text-opacity: 1;
	color: rgba(var(--bs-accent-rgb),var(--bs-text-opacity))!important;
}

/* Scrollbar Colours */
::-webkit-scrollbar {
	width: 10px;
	color: #ffffff;
}

::-webkit-scrollbar-track {
	background: #212529;
}

::-webkit-scrollbar-thumb {
	background: #d63384;
	border-radius: 30px;
}

::-webkit-scrollbar-thumb:hover {
	background: #cb0266;
}
```

## Authors

Created By [Hadi-Koubeissi](https://github.com/Hadi-Koubeissi)
Modified By [Senka Wolf](https://github.com/SenkaWolf)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
