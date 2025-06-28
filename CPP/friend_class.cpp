#include <iostream>
using namespace std;
class two;
class one
{
    int a=1;
    public: 
        friend class two;
};
class two
{
    int b;
    public: 
        void dis(one o)
        {
            cout<<o.a;
        }
};
int main()
{
    one o1;
    two t;
    t.dis(o1);
    return 0;
}