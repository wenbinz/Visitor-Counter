import sys

def write(num):
  f = open("counter.txt","w")
  f.write(str(num))
  f.close()
if  __name__=="__main__":
  write(sys.argv[1])
