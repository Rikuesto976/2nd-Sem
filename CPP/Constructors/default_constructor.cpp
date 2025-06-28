#include <iostream>
using namespace std;
class construct
{
    private:
        int x,y;
    public:
        construct()
        {
            x=0,y=0;
        }
        void display();
};
void construct::display()
{
    cout<<"X = "<<x<<endl;
    cout<<"Y = "<<y<<endl;
}
int main()
{
    construct obj;
    obj.display();
    return 0;
}
