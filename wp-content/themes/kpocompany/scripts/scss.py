'''
# python implementation of sass
# install libsass for python : pip install libsass
'''
import  sass
import sys



if( len(sys.argv) != 2):
  print(" filename should be the first paramerter")
  print(" Usage: ./sass.py answer") 
file_path = './scss/' 

scss= sass.compile(filename=file_path+sys.argv[1]+'.scss',output_style='compressed').encode('utf-8-sig')
with open('./css/style.css','wb') as example_scss:
	example_scss.write(scss)
	