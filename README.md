# Discord Bots Website Template
Stunning website template with a basic UI design for any new Discord bots projects or can be adapted to suit any need. It is built with Bootstrap and comes with some ready-made pages.

Demo: https://demo-discordbot-website-template.senkawolf.com

## Main Page:

![Screenshot1](https://raw.githubusercontent.com/Hadi-Koubeissi/Discord-bot-website-template/Main/assets/Screenshot.PNG)

## Command Page:
![Screenshot4](https://raw.githubusercontent.com/Hadi-Koubeissi/Discord-bot-website-template/Main/assets/Screen2.PNG)

and more pages...

# Installing
Click Code then press download ZIP. Once you have the ZIP file extract the files and upload the website folder contents to your servers websites root folder via FTP. Or use whatever method you prefer.

## Built With: 

* [Bootstrap](https://getbootstrap.com/) - The web framework used
* [Jquery](https://jquery.com/) - For scripts

## How To Use

These pages get included on the index and command page. This allows you to update one file and all pages will reflect the change.
* To edit the header go to `includes/header.php`
* To edit the navbar go to `includes/navbar.php`
* To edit the footer go to `includes/footer.php`

If you want to change the websites accent colours then edit the following sections within `assets/css/style.css`
```CSS
:root {
	--bs-accent-rgb: 214,51,132;
}

/* Button Outline */
.btn-outline-accent {
	color: #d63384;
	border-color: #d63384;
}

.btn-outline-accent:hover {
	color: #fff;
	background-color: #d63384;
	border-color: #d63384;
}

/* Button */
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
```

## Authors

Created By [Hadi-Koubeissi](https://github.com/Hadi-Koubeissi)
Modified By [Senka Wolf](https://github.com/SenkaWolf)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
