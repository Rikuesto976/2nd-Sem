//using in-line function, calculate volume of rectangle
#include <iostream>
using namespace std;
inline int volume(int l, int b, int h)
{
    return (l*b*h);
}
int main()
{
    int a,b,c;
    cout<<"Enter Length, Breadth and height of cuboid: "<<endl;
    cin>>a>>b>>c;
    cout<<"Volume = "<<volume(a,b,c)<<endl;
    return 0;
}
