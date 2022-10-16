# include<bits/stdc++.h>

using namespace std;

int main(){
    
    int i,j,a[10],b[10];
    int flag =0;
    for(i=0;i<5; i++){
        cin>>a[i];
    }
    
    for(i=0;i<5; i++){
        cin>>b[i];
    }
    
    for(i=0;i<5;i++){
    for(j=0;j<5;j++){
        if(a[i]==b[j]){
            flag = 1;
            break;
        }
    }
    if(flag == 0){
        cout<<a[i]<<endl;
    }
    else{
        flag=0;
    }
    }
    
    return 0;
}