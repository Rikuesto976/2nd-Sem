#include <iostream>
using namespace std;
class Height
{
    int feet, inches;
    public:     
        Height()
        {
            feet = 0, inches=0;
        }
        Height(int f, int i)
        {
            feet = f;
            inches = i;
        }

        void operator+=(Height &o)
        {
            inches += o.inches;
            feet += o.feet;
            feet += inches / 12;
            inches = inches % 12;
        }

        void display()
        {
            cout<<"Feet: "<<feet<<endl;
            cout<<"Inches: "<<inches<<endl;
        }
};

int main()
{
    Height h1(5, 10), h2(5, 6);
    h1 += h2;

    h1.display();
}