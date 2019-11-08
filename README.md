# COGIP
###### Vive la COGIP

Cogip Application Project at [BeCode](https://becode.org)

This project had been done in october 2019 with
- [Pierre Kimbanzi](https://github.com/PierreKimbanziR)(*Companie MVC*),
- [Emmanuel Trepant](https://github.com/manutrepant)(*Contact MVC, Mockups*),
- [Guillaume Dery](https://github.com/GuillaumeDery98)(*Invoices MVC, upgrade/debug of contact and companie*)
- [Philippe Gilles](https://github.com/philesgilles) (*Team leading, structure, design, dashboard and users sections, upgrades/debug and overview of team's work, implementation of JS libraries*)

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

### Invoices:

- special @Media print for printing beautyfull invoices from within the webpage.
- Print button on invoices page to print directly the invoice.
- Barcode is generated automatically with the invoice number
- The form to add an invoice is dynamic and change in function of the type of client (Contact or Company)

### Companies:

- **Add company**: Different 'company type' (none/provider/client) selection if we add from the companies/providers or clients page.


### Dashboard:

- added a chart showing sales of employees (ATM it's dummy datas).


***
### Mockups

[Click here](https://github.com/philesgilles/cogip/blob/master/infos/README.md) to see the mockups

### Screenshot

![Application screen](https://github.com/philesgilles/cogip/blob/master/infos/screenshot.png 'Application screen')

### Flow Chart

![Application flowChart](https://github.com/philesgilles/cogip/blob/master/infos/cogip%20flowchart.png 'Application FlowChart')

### Database Structure

![Application Database](https://github.com/philesgilles/cogip/blob/master/infos/db-chart.png 'Database')
