#include <iostream>
using namespace std;
class Base
{
    public:
        Base()
            {
                cout<<"Base Class Constructor."<<endl;      //  1st Constructed
            }
        virtual ~Base()                                     // Virtual Destructor
            {
                cout<<"Base Class Destructor."<<endl;       //  ONLY ONE Destroyed
            }
};

class Child: public Base
{
    public:
        Child()
            {
                cout<<"Child Class Constructor."<<endl;     // 2nd Constructed
            }
        ~Child()
            {
                cout<<"Child Class Destructor."<<endl;      //  IGNORED
            }
};

int main()
{
    Base *ptr = new Child();

    delete ptr;
}