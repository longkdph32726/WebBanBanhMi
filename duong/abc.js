// view : Xem sản phẩm, trang chủ, giới thiệu, đặt bàn
// user: đánh giá, ưu đãi, đặt hàng, đặt bàn
//
//
//
//
// CƠ SỞ DỮ LIỆU --------------------
// 
// - Danh mục: id dm,ten dm
// - Ưu đãi : id ud, Tên ưu đãi, giamgia
// - Sản phẩm: id sp, ten sp, ảnh, giá, mô tả, lượt mua, id dm, id ưu đãi,
// - Tài khoản: id tk, user, pass, sdt, email, role (0:admin, 1: user)
// - Bàn: id bàn, ten, email, sdt, date, time, songuoi, messenger
// - Bình luận: id bl, id sp, id tk, nội dung ,ngày bình luận
// - Giỏ hàng: id giỏ hàng, id sp, id tk
// - Yêu cầu đơn hàng: id yc, id tk, id sp, giaidoan
//
//
// HƯỚNG ĐI: 
//    + ĐẶT BÀN: chọn bàn -> đặt bàn -> red -> bấm vào nút khách về -> blue;
//    + ĐẶT HÀNG: ct sp -> nút đặt hàng -> nhập thông tin địa chỉ -> xác nhận đặt hàng -> alert: bạn đã đặt hàng
//    + Xem thông tin tk và thông tin đặt hàng: (Đóng gói -> đang giao -> đã nhận);