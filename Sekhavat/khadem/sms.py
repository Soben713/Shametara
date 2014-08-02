# -*- coding: utf-8 -*-
from suds.client import Client


def send_sms(phone, text):
    phone = str(phone)

    username = "mohammadr"
    password = "mohammadr"
    sender = "30009900666554"
    sendTo = phone

    client = Client("http://ws.iran.tc/index.php?wsdl")

    info = {'username': username, 'password': password,
            'reciver': sendTo, 'text': text, 'sender': sender}

    return client.service.SendSMS(**info)

# send_sms("09129376697", "salam bar kire khare asbe abi")
