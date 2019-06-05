from telethon import TelegramClient, sync, events
from telethon.tl.functions.messages import GetHistoryRequest, GetBotCallbackAnswerRequest
from time import sleep
import random

# Use your own values from my.telegram.org
api_id = 717425
api_hash = '322526d2c3350b1d3530de327cf08c07'
phone_number = "+6285336117892"
# The first parameter is the .session file name (absolute paths allowed)
client = TelegramClient(phone_number, api_id, api_hash)

client.connect()
if not client.is_user_authorized():
    client.send_code_request(phone_number)
    me = client.sign_in(phone_number, input('Enter code : '))

myself = client.get_me()
print ("Welcome",myself.first_name,"\n\n")
mes = ["Yuuhhhuuuu You Are The Best","Yeah This Is So Good News","its very good brother thanks you","thanks you for your rain","yeeeeaaaah it's very good men. i like this group","wow woow wooow hahahahha","lets play again hahahaha","come on doge","Thanks You Man","Still Best Group Ever","Wow men its very cool","stay here and keep calm hahahah"]
@client.on(events.NewMessage)
async def my_event_handler(event):
    if 'Doge;rain' in event.raw_text:
        text = random.choice(mes)
        print ("Message >>"+event.raw_text)
        sleep(30)
        await event.reply(text)
        print ("Reply >>"+text)
    elif 'doge;rain' in event.raw_text:
        text = random.choice(mes)
        print ("Message >>"+event.raw_text)
        sleep(60)
        await event.reply(text)
        print ("Reply >>"+text)
client.start()
client.run_until_disconnected()
