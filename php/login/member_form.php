<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form">
                <center><h2> ◎ 회원 가입 ◎ </h2></center>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">이름</label>
                    <div class="col-sm-6">
                        <input type="text" id="firstName" placeholder="이름을 입력하세요" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">비밀번호</label>
                    <div class="col-sm-6">
                        <input type="password" id="password" placeholder="비밀번호를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">생년월일</label>
                    <div class="col-sm-6">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="adress" class="col-sm-3 control-label">주소</label>
                    <div class="col-sm-6">
                        <input type="text" id="adress" placeholder="주소를 입력하세요" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" id="email" placeholder="이메일주소를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">전화번호</label>
                    <div class="col-sm-2">
                        <select id="phone1" class="form-control">
                            <option>010</option>
                            <option>011</option>
                            <option>017</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" id="phone2" value="" size="4" maxlength="4" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" id="phone3" value="" size="4" maxlength="4" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">성별</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female"> 여성
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male"> 남성
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">취미</label>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="photoCheckbox" value="Photo">사진찍기
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="foodCheckbox" value="Food">맛집 탐방
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="shoppingCheckbox" value="Shopping">쇼핑
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="planCheckbox" value="Plane">계획적
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="walkCheckbox" value="Walk">뚜벅이
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="naturalsCheckbox" value="Naturals">자연풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="cityCheckbox" value="City">도시풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="crowdCheckbox" value="Crowd">붐비는 곳
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="silenceCheckbox" value="Silence"> 조용한 곳
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="etcCheckbox" value="Etc"> 기타
                                <input type="text" id="etc" value="기타.." class="form-control">
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="intro" class="col-sm-3 control-label">자기소개</label>
                    <div class="col-sm-6">
                        <textarea type="text" id="intro" placeholder="자기소개를 작성하세요." rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">동의합니다. <a href="#">자세히 보기</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                            <div class="col-sm-4">
                              <button type=reset value="Reset" class="btn btn-primary btn-block">다시작성</button>
                            </div>
                            <div class="col-sm-4">
                              <button type="cancel" value="Cancel" onclick="history.back();" class="btn btn-primary btn-block">취소</button>
                            </div>
                            <div class="col-sm-4">
                              <button type="submit" value="Submit" class="btn btn-primary btn-block">제출</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
