#include <bits/stdc++.h>
using namespace std;

int ispresent(int num, int a[], int n) {
    int flag = 0;
    for(int i=0; i<n; i++) {
        if(a[i] == num) {
            flag = 1;
            break;
        }
    }
    if(flag == 0) {
        return 0;
    }
    if(flag == 1) {
        return 1;
    }
}

int main() {
    int n,a[100];
    cin>>n;
    for(int i=0;i<n;i++) {
        cin>>a[i];
    }
    
    int count = 0;
    int sum = 0;
    for(int i=0;i<n;i++) {
        for(int j=i+1;j<n;j++) {
            sum = a[i] + a[j];
            if(ispresent(sum, a, n)) {
                count++;
            }
        }
    }
    cout<<count;

    return 0;
}