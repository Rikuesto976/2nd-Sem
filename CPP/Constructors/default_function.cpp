#include <iostream>
using namespace std;
double si(float p, float t, float r=1.5)
{
    return(p*t*r/100);
}
int main()
{
    float p,t;
    cout<<"Enter Time and Principle: "<<endl;
    cin>>t>>p;
    cout<<"SI = "<<si(t,p)<<endl;
    return 0;
}
