f = open("visits.txt", "r+")
output = f.read()
f.seek(0)
f.write(str(int(output)+1))
