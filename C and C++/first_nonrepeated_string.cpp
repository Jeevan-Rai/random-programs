# include<bits/stdc++.h>

using namespace std;

int main(){
    
    char str[100];
    int flag=0;
    cin.get(str, 100);
    for(int i=0;i<sizeof(str);i++){
        for(int j=i+1;j<sizeof(str);j++){
            if(str[i]==str[j]){
                flag = 0;
                break;
            }
            else{
                flag =1;
                continue;
            }
        }
        if(flag == 1){
            std::cout << str[i] << std::endl;
            break;
        }
    }
    return 0;
}