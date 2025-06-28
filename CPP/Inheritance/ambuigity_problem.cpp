#include <iostream>
using namespace std;
class One
{
    public: 
        void show()
        {
            cout<<"This is class One."<<endl;
        }
};
class Two
{
    public:
        void show()
        {
            cout<<"This is class Two."<<endl;
        }
};
class Three: public One, public Two 
{
    public:
        void display()
        {
            cout<<"This is member function of Child Class Three"<<endl;
        }
};
int main()
{
    Three o;
    o.One::show();
    o.Two::show();
    o.display();
    return 0;
}

/*                                  //ERROR PROGRAM !!!!
    int main()
    {
        Three o;
        o.show();
        o.display();
        return 0;
    }
*/