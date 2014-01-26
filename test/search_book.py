import urllib, bs4

def get_book(isbn):
	''' get the book description by search the douban's repository
	
	isbn: is the book's isbn number'''
	
	base_url  = "http://book.douban.com/subject/"
	search_url = base_url + isbn
	
	html_f = urllib.urlopen(search_url)
	html_data = bs4.BeautifulSoup(html_f)
	
	r = html_data.find_all(id='interest_sectl')
	print r
	
if __name__ == "__main__":
	get_book("24536403")