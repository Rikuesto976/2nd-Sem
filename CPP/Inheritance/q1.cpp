#include <iostream>
using namespace std;
class A
{
        int a;
    public:
        void setA()
        {
            a=90;
        }
        void show()
        {
            cout<<a;
        }
};
class B:public A
{

};
int main()
{
    B b;
    b.setA();
    b.show();
    return 0;
}