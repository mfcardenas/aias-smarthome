# AIAS - SmartHome
AIAS - Virtual model of the domotic installations

This repository contains a web application that allows a virtual tour of the AIAS association's facilities in Bologna. The spaces that can be visited are the <i>SmartHome</i> and the outdoor area with the learning circuit.

They are not an exact copy of the installations, they are simply a quick prototype of what the virtual tour could be.

The aim is to be able to use this material to teach users, professionals and other groups about the different activities carried out in the centre.

This project has the collaboration of:

<table width="75%" style="width: 50%; border: none;">
<tr>
    <td><img src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/logo-definitivo.png" width="120px" /></td>
    <td><img src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/GRASIA_logotipo2B.png" width="120px" /></td>
</tr>
<tr>
    <td><img src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/Risewise_Logo.png" width="120px" /></td>
    <td><img src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/logo_colosaal.png" width="120px" /></td>
</tr>
</table>

- [GRASIA](http://grasia.fdi.ucm.es)
- [AIAS](http://www.aiasbo.it)
- [RiseWise](https://risewise.eu)
- [ColosAAL](https://grasia.fdi.ucm.es/colosaal)


### Install 

The tools needed to use this repository are as follows:

- SO Linux, Mac
- Python 2.7 (or higher)
- Docker Compose [how to Install](https://docs.docker.com/compose/install/)

### Run Application

```
$>git clone https://github.com/mfcardenas/aias-smarthome.git
$>cd aias-smarthome
$>docker-compose up -d
```

Visit the web application in the following URL:
http://localhost:8086

If you want to change the port of the application, modify the file <i>"docker-compose.yml"</i> and change the ports in the <i>"ports"</i> section.

ports: (host port: container port)
- "8086:80"  