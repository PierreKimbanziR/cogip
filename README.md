# COGIP
###### Vive la COGIP

Cogip Application Project at [BeCode](https://becode.org)

This project had been done in october 2019 with
- [Pierre Kimbanzi](https://github.com/PierreKimbanziR) (*companies MVC*),
- [Emmanuel Trepant](https://github.com/manutrepant) (*contacts MVC, Mockups*),
- [Guillaume Dery](https://github.com/GuillaumeDery98) (*invoices MVC, upgrade/debug of contact and companie*)
- [Philippe Gilles](https://github.com/philesgilles) (*team leading, structure, design, dashboard and users sections, upgrades/debug and overview of team's work, implementation of JS libraries*)

This project is a full Administration Tool written in PHP and uses **routed VMC** and some **JS Libraries**
It can manage contacts, clients, providers, invoices and users.

## Informations

All tables have a search option and pagination. 
The preview server is hosted on **Online.net** and fully configured using **Docker**.
The database is hosted on **AWS EDS**.

### Technologies used:

- PHP
- MySQL (MariaDB on AWS EDS)
- Javascript
- [JQuery](https://jquery.com)
- [MDBootstrap](https://mdbootstrap.com/) (free version)
- [Select2](https://select2.org/)
- [JsBarcode](https://lindell.me/JsBarcode/)
- [ChartJS](https://www.chartjs.org/)

### Users level

- 2 levels of users (Super Admin and User) but the system is built to handle 4 levels (invitee,user,admin,superAdmin).
- Admins can CRUD everything
- Users can CR everything

### Home Page:

- Alert on top of the page greating the user with a speacial joke (different every time).
- direct link to providers/clients
- button to easy add an invoice, company or client.
- quick view of last 5 invoices,companies and clients

### Invoices:

- View all invoices
- CRUD invoices
- special @Media print for printing beautyfull invoices from within the webpage.
- Print button on invoices page to print directly the invoice.
- Barcode is generated automatically with the invoice number
- The form to add an invoice is dynamic and change in function of the type of client (Contact or Company)
- **Special dedicasse** for the longest SQL request: `SELECT invoices.clientType clientType,invoices.companyId companyId, invoices.contactId contactId, invoices.invoiceNumber invoiceNumber, invoices.description description, invoices.amount amount, invoices.type type, invoices.createdAt createdAt, contacts.firstname firstname, contacts.lastname lastname, contacts.email email, contacts.telephone telephone, contacts.workingAt workingAt, companies.name name, companies.country country, companies.vat vat FROM invoices LEFT JOIN companies ON invoices.clientType = 0 AND invoices.companyId = companies.id LEFT JOIN contacts ON invoices.clientType = 1 AND invoices.contactId = contacts.id WHERE invoices.id = ?`

### Companies:

- View all companies
- View only providers/clients
- CRUD companies
- **Add company**: Different 'company type' (none/provider/client) selection if we add from the companies/providers or clients page.

### Contacts

- View all contacts
- CRUD contacts

### Dashboard:

- chart showing sales of employees (ATM it's dummy datas).
- quick view of last 5 invoices,companies and clients.
- quick add company,contact,invoice.

***
### Mockups

[Click here](https://github.com/philesgilles/cogip/blob/master/infos/README.md) to see the mockups

### Screenshot

![Application screen](https://github.com/philesgilles/cogip/blob/master/infos/screenshot.png 'Application screen')

### Flow Chart

![Application flowChart](https://github.com/philesgilles/cogip/blob/master/infos/cogip%20flowchart.png 'Application FlowChart')

### Database Structure

![Application Database](https://github.com/philesgilles/cogip/blob/master/infos/db-chart.png 'Database')
