                        //ABSTRACT CLASS
#include <iostream>
using namespace std;
class Base
{
    public: 
        Base()
        {
            cout<<"I am Virtual Base Class Constructor."<<endl<<endl;
        }
        virtual ~Base()
        {
            cout<<"I am Virtual Base Class Destructor."<<endl<<endl;
        }

        virtual void Abstract()=0;
};

class C1: public Base
{
    public:
        void Abstract()
        {
            cout<<"First Implementation of Pure Virtual Class Abstract."<<endl<<endl;
        }
};

class C2: public Base
{
     public:
        void Abstract()
        {
            cout<<"Second Implementation of Pure Virtual Class Abstract."<<endl<<endl;
        }

        
};

int main()
{
    Base *ptr;

    C1 o1; C2 o2;
    ptr = &o1;
    ptr ->Abstract();

    ptr = &o2;
    ptr->Abstract();

    return 0;
}