#include <iostream>
using namespace std;
class Base
{
    public:
        Base()
            {
                cout<<"Base Class Constructor."<<endl;      //  1st Constructed
            }
        ~Base()
            {
                cout<<"Base Class Destructor."<<endl;       //  Last Destroyed
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
                cout<<"Child Class Destructor."<<endl;      //  1st Destroyed
            }
};

int main()
{
    Child c;                //Child Class is executed, Base Class is also Executed AUTOMATICALLY
    return 0;
}