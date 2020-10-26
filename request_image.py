import requests

image_url = "https://no1mart.img9.kr/home/detail/ice02.jpg"
headers = {'User-agent': 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 'Accept':'text/html,application/xhtml+xml,applicpipation/xml;q=0.9,*/*;q=0.8','Accept-Encoding':'gzip,deflate,sdch', 'Referer': 'https://foodspring.co.kr'}

r = requests.get(image_url, headers = headers)

print(r)