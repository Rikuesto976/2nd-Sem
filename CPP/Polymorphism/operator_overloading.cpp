#include <iostream>
using namespace std;
class Height
{
    int h1, h2;
    public:     
        Height()
        {
            h1 = 0, h2=0;
        }
        Height (int a, int b)
        {
            h1=a, h2=b;
        }
        void display()
        {
            cout<<"Height 1: "<<h1<<endl<<"Height 2: "<<h2<<endl;
        }
        Height operator+(Height &x)
        {
            Height temp;
            temp.h1 = this->h1 + x.h1;
            temp.h2 = this->h2 + x.h2;
            return temp;
        }
};



int main()
{
    Height o1(5, 7), o2(6, 8), o3;
    o3 = o1 + o2;
    cout<<"Sum of Heights: "<<endl;
    o3.display();
    return 0;
}