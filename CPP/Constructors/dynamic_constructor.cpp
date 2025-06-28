#include <iostream>
#include <string.h>
using namespace std;
class Demo
{
    char *p;
    public:
        Demo()
            {
                p = new char[1];            //atleast one value should be given
                strcpy(p, " ");
            }
        Demo(const char *s)                 //const is not mandatory
            {
                p = new char[strlen(s) + 1];
                strcpy(p, s);
            }
        ~Demo()
            {
                delete[] p;
            }
        void display()
            {
                cout<<"Name: "<<p<<endl;
            }
};
int main()
{
    Demo d;                             //for default constructor
    Demo d1("Anurodh");
    Demo d2("Anurodh Kanth");
    d1.display();
    d2.display();
    return 0;
}