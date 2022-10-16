# include<bits/stdc++.h>

using namespace std;

int main(){
    
    int temp = 1, n;
    cin>>n;
    int row=n*2;
    for(int i=0;i<row;i++){
        if(i<n-1){
        for(int j=temp; j>=1; j--){
            cout<<j;
        }
        temp++;
        cout<<endl;
        }
        else{
            for(int j=temp; j>=1; j--){
            cout<<j;
        }
        temp--;
        cout<<endl;
        }
    }
    return 0;
}