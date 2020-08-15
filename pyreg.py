import urllib.parse
import urllib.request
from faker import Faker
fake = Faker()
url = 'http://localhost/MON/register.php'
for x in range(10):
   values = {'email' : fake.email(),
          'full_name' : fake.name(),
          'address' : fake.address() 
          }

   data = urllib.parse.urlencode(values)
   data = data.encode('ascii') # data should be bytes
   req = urllib.request.Request(url, data)
   with urllib.request.urlopen(req) as response:
      print(response.read())
