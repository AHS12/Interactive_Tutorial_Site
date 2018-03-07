#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n, x, a[100], p[100];
    cin>>n;
    cin>>x;

    for(int i=n; i>=0; i--)
    {
        cin>>a[i];
    }
    p[n]=a[n];

    for(int i=n-1; i>=0; i--)
    {
        p[i]=p[i+1]*x+a[i];
    }
    cout<<p[0];
}
