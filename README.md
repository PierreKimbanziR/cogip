# COGIP
###### Vive la COGIP

Cogip Application Project at [BeCode](https://becode.org)

This project had been done in october 2019 with
[Pierre Kimbanzi](https://github.com/PierreKimbanziR),
[Emmanuel Trepant](https://github.com/manutrepant),
[Guillaume Dery](https://github.com/GuillaumeDery98),
[Philippe Gilles](https://github.com/philesgilles)

It is a full Administration Tool written in PHP and uses **routed VMC**.
It can manage contacts, clients, providers, invoices and users.

## Informations

All tables have a search option and pagination. 
The server is hosted on Online.net and fully configured using Docker.
The database is hosted on AWS EDS.

### Technologies used:

- PHP
- MySQL (MariaDB on AWS EDS)
- Javascript
- [JQuery](https://jquery.com)
- [MDBootstrap](https://mdbootstrap.com/) (free version)
- [Select2](https://select2.org/)
- [JsBarcode](https://lindell.me/JsBarcode/)
- [ChartJS](https://www.chartjs.org/)

### Invoice Page

There is a special @Media print for printing beautyfull invoices from within the webpage
Barcode is generated automatically with the invoice number

***
[Manu's beautyfull MockUps](https://github.com/philesgilles/cogip/blob/master/infos/README.md)

### Screenshot

![Application screen](https://github.com/philesgilles/cogip/blob/master/infos/screenshot.png 'Application screen')

### Flow Chart

![Application flowChart](https://github.com/philesgilles/cogip/blob/master/infos/cogip%20flowchart.png 'Application FlowChart')

### Database Structure

![Application Database](https://github.com/philesgilles/cogip/blob/master/infos/db-chart.png 'Database')
