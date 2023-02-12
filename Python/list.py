def listfun(num):
    li = []
    for i in range(num):
        print("Enter the Score for list ",i+1)
        new = []
        li.append(new)
        for j in range(6):
            temp=int(input())
            li[i].append(temp)
    
    cnt = 1
    for i in li:
        print("\nPlayer ", cnt)
        cnt+=1
        for j in range(len(i)):
            print("Ball ",(j+1)," : ",i[j])


num = int(input("Enter total nuumber of lists: "))
listfun(num)