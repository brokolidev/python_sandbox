a, b = map(int, input().strip().split(' '))
for i in range(0, b):
    stars = ""
    for k in range(0, a):
        stars += '*'
    print(stars)