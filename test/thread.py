import urllib
import json

import threading
import datetime

url_search_id="https://api.douban.com/v2/book/379531?fields=id,title,rating"
url_search_subject="https://api.douban.com/v2/book/search"

class ThreadClass(threading.Thread):
	def __init__(self, url, m):
		threading.Thread.__init__(self)
		self.url = url
		self.m = m

	def run(self):
		#now = datetime.datetime.now()
		#print "%s says Hello World at time: %s" % (self.getName(), now)

		params = urllib.urlencode(self.m)
		r = urllib.urlopen(self.url, params)

		jr = json.loads(r.read())
		print jr
		#for b in jr['books']:
		#	print b['title']

		#print "%s get the book's rating %s" % (self.getName(), book)

COUNT_NUMBER = 10

def search_subject(_start, _book):
	m={'start':_start, 'count':COUNT_NUMBER, 'q':_book}
	return ThreadClass(url_search_subject, m);

def get_books(_start, _book):
	m={'start':_start, 'count':COUNT_NUMBER, 'q':_book}
	params = urllib.urlencode(m)
	
	r = urllib.urlopen(url_search_subject, params)
	jr = json.loads(r.read())
	
	outfile = open("books.txt", "a")
	for b in jr['books']:
		outfile.write(b['title'].encode("utf-8").join("\r\n"))

def get_total_number(_book):
	m={'start':0, 'count':10, 'q':_book}
	r = urllib.urlopen(url_search_subject, urllib.urlencode(m));
	
	jr = json.loads(r.read())
	return jr['total']

if __name__ == "__main__":
	total_number = get_total_number('ruby')
	total_pages = int(round(total_number/10))
	for i in range(total_pages):
		f = i*10
		get_books(f, 'ruby')

	#for i in range(1):
	#	t = search_subject('ruby')
	#	t.start()