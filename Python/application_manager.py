def getOpenApplications(command):
    open = []
    for i in command:
        if i.split()[0] == 'open':
            open.append(i.split()[1])
        
        if i.split()[0] == 'close':
            if(int(i.split()[1]) > len(open)):
                open.clear()
            
            else:
                for j in range(int(i.split()[1])):
                    open = open[:-1]
        
        if i.split()[0] == 'clear':
            open.clear()


    return open



print(getOpenApplications(['open firefox', 'open curl', 'open terminal', 'close 2', 'clear']))