
def read():
  f = open('counter.txt', 'r')
  count = f.read()
  f.close()
  return count

if __name__=="__main__":
  print read()
