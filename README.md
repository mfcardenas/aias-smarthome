# AIAS - SmartHome
AIAS - Virtual model of the domotic installations

This repository contains a web application that allows a virtual tour of the AIAS association's facilities in Bologna. The spaces that can be visited are the <i>SmartHome</i> and the outdoor area with the learning circuit.

They are not an exact copy of the installations, they are simply a quick prototype of what the virtual tour could be.

The aim is to be able to use this material to teach users, professionals and other groups about the different activities carried out in the centre.

This project has the collaboration of:
<div style="display: flex; justify-content: center; width:100%; height:100%;">
<table style="border: none;">
<tr style="align-self: center; margin: 0 auto;">
    <td style="padding: 5px;"><img alt="AIAS Logo" src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/logo-definitivo.png" width="120px" /></td>
    <td style="padding: 5px;"><img alt="GRASIA Logo" src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/GRASIA_logotipo2B.png" width="120px" /></td>
    <td style="padding: 5px;"><img alt="RISEWISE Logo" src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/Risewise_Logo.png" width="120px" /></td>
    <td style="padding: 5px;"><img alt="ColosAAL Logo" src="https://github.com/mfcardenas/aias-smarthome/blob/master/web/assets/img/logo_colosaal.png" width="120px" /></td>
</tr>
</table>
</div>

- [AIAS](http://www.aiasbo.it)
- [GRASIA](http://grasia.fdi.ucm.es)
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

<div>
</div>