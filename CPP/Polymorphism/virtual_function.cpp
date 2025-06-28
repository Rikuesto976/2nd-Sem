#include <iostream>
using namespace std;
class Base
{
    public:
        virtual void display()
        {
            cout<<"Base Class Method"<<endl;
        }
};

class Child:public Base
{
    public:
        void display()
        {
            cout<<"Child Class Method"<<endl;
        }
};

int main()
{
    Base *ptr;
    Base bb;
    ptr = &bb;
    cout<<"Pointing Towards Base Class"<<endl;
    ptr ->display();

    Child dd;
    cout<<"Pointing Towards Child Class"<<endl;
    ptr = &dd;
    ptr->display();

    return 0;

}